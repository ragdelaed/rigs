#!/usr/bin/perl

use strict;
use DBI;
use POSIX qw(strftime);
use DateTime;
use Time::HiRes;
use POSIX;


my $database="rigs";
my $hostname="localhost";
my $user="root";
my $password="P\@ssw0rd";
my $port="3306";

my $dsn = "DBI:mysql:database=$database;host=$hostname;port=$port";
my $dbh = DBI->connect($dsn, $user, $password);

sub email {
    my ($alert,$message) = (@_);
    # first, create your message
    use Email::MIME;
    my $message = Email::MIME->create(
      header_str => [
        From    => 'alerts@ragdelaed.com',
        To      => '6786306112@vtext.com',
        Subject => $alert,
      ],
      attributes => {
        encoding => 'quoted-printable',
        charset  => 'ISO-8859-1',
      },
      body_str => "$message\n",
    );

    # send the message
    use Email::Sender::Simple qw(sendmail);
    #sendmail($message);

}

sub query {
    my $host=shift(@_);
    my $sth = $dbh->prepare("
select 
    rack_loc,
    timestamp,
    uptime,
    status,
    ip,
    overheatedgpu as OHGPU,
    throttled as THR,
    memstates,
    temp,
    FROM_UNIXTIME(timestamp/1000,'%Y-%M-%d %H:%i:%s') as Timestamp,
    FROM_UNIXTIME(unix_timestamp(now()) - uptime,'%Y-%M-%d %H:%i:%s') as LastBoot
from 
    rigs 
where 
    rack_loc = ?  
order by id desc 
limit 1
    ") or die "prepare statement failed: $dbh->errstr()";


    $sth->execute($host) or die "execution failed: $dbh->errstr()";
    while (my $ref = $sth->fetchrow_hashref()) {
        my $epoc = time();
        my $timedifference=ceil($epoc - $ref->{'timestamp'}*0.001);
        #print "epoc ".$epoc.", timestamp ".$ref->{'timestamp'}.", timedifference ".$timedifference."\n";

        
        if ("$timedifference" > 800) {
            email ($ref->{'rack_loc'}, "down for ". ceil($timedifference/3600)." hours");
            print $ref->{'rack_loc'}, "down for ". ceil($timedifference/3600)." hours\n";
        }

        print "$ref->{'rack_loc'},$ref->{'ip'},$ref->{'OHGPU'},$ref->{'THR'},$ref->{'status'},$ref->{'Timestamp'},$ref->{'LastBoot'},$timedifference\n";
    }
    $sth->finish;
}

my @host_array = ("eld01", "eld02", "eld03", "eld04","eld05","jld01","jld02","tmd01","tmd02","tmd03","r1_10","r1_11","r1_12","r1_13","r1_14","r1_15","r1_16","r1_17","r1_18","r1_19");
foreach my $host (@host_array)
{
    query ($host);
}
