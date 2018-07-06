#!/usr/bin/perl

use JSON;
use DBI;
use strict;
use warnings;

binmode STDOUT, ":utf8";
use utf8;
use Sys::Syslog qw(:standard :macros setlogsock);  # standard functions & macros

#my $program = "parse_in.pl";
#openlog("$program", 'noeol,nonul');
#syslog('info', 'running parse_in.pl');
#closelog();



# MySQL database configurations
my $dsn = "DBI:mysql:rigs";
my $username = "root";
my $password = 'P@ssw0rd';


sub get_directory_listing() {
    my $d="/opt/rigs/in/";
    opendir(D, "$d") || die "Can't open directory $d: $!\n";
    my @list = readdir(D);
    closedir(D);
    foreach my $f (@list) {
        if ("$f" =~ m/json/) {
            parse_file($f);
            unlink($d."/".$f);
        }
    }
}
sub printError {
    my ($sql,$error) = @_;

    print "sql: $sql\n\nerror: $error\n\n";
}

sub parse_file() {
    my $filename = shift;
    print "processing $filename in parse_file\n";
    my $json;
    {
      local $/; #Enable 'slurp' mode
      open my $stats_fh, "<", "/opt/rigs/in/".$filename;
      $json = <$stats_fh>;
      close $stats_fh;
    }
    my $data = decode_json($json);
    # Output to screen one of the values read

    my ($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = gmtime($data->{'uptime'});
    my $human_uptime= "$yday days $hour hours $min minutes $sec seconds";
    my $check_in_time=time();
	print "check in time is $check_in_time\n\n";


    my $dbh = DBI->connect($dsn,$username,$password) || die "Could not connect to database: $DBI::errstr";
my $sql = "
INSERT INTO rigs 
(
defunct,
off,
allowed,
overheat,
pool_info,
pool,
miner_version,
rx_kbps,
tx_kbps,
kernel,
boot_mode,
uptime,
human_uptime,
mac,
hostname,
rack_loc,
ip,
mobo,
lan_chip,
`load`,
ram,
cpu_temp,
cpu_name,
rofs,
drive_name,
freespace,
temp,
version,
miner_secs,
adl_error,
proxy_problem,
updating,
connected_displays,
resolution,
gethelp,
config_error,
send_remote,
autorebooted,
status,
driver,
selected_gpus,
gpus,
fanrpm,
fanpercent,
hash,
miner,
miner_hashes,
models,
bioses,
default_core,
default_mem,
vramsize,
core,
mem,
memstates,
meminfo,
voltage,
overheatedgpu,
throttled,
powertune,
timestamp,
check_in_time
) 
VALUES 
(
'$data->{'defunct'}',
'$data->{'off'}',
'$data->{'allowed'}',
'$data->{'overheat'}',
'$data->{'pool_info'}',
'$data->{'pool'}',
'$data->{'miner_version'}',
'$data->{'rx_kbps'}',
'$data->{'tx_kbps'}',
'$data->{'kernel'}',
'$data->{'boot_mode'}',
'$data->{'uptime'}',
'$human_uptime',
'$data->{'mac'}',
'$data->{'hostname'}',
'$data->{'rack_loc'}',
'$data->{'ip'}',
'$data->{'mobo'}',
'$data->{'lan_chip'}',
'$data->{'load'}',
'$data->{'ram'}',
'$data->{'cpu_temp'}',
'$data->{'cpu_name'}',
'$data->{'rofs'}',
'$data->{'drive_name'}',
'$data->{'freespace'}',
'$data->{'temp'}',
'$data->{'version'}',
'$data->{'miner_secs'}',
'$data->{'adl_error'}',
'$data->{'proxy_problem'}',
'$data->{'updating'}',
'$data->{'connected_displays'}',
'$data->{'resolution'}',
'$data->{'gethelp'}',
'$data->{'config_error'}',
'$data->{'send_remote'}',
'$data->{'autorebooted'}',
'$data->{'status'}',
'$data->{'driver'}',
'$data->{'selected_gpus'}',
'$data->{'gpus'}',
'$data->{'fanrpm'}',
'$data->{'fanpercent'}',
'$data->{'hash'}',
'$data->{'miner'}',
'$data->{'miner_hashes'}',
'$data->{'models'}',
'$data->{'bioses'}',
'$data->{'default_core'}',
'$data->{'default_mem'}',
'$data->{'vramsize'}',
'$data->{'core'}',
'$data->{'mem'}',
'$data->{'memstates'}',
'$data->{'meminfo'}',
'$data->{'voltage'}',
'$data->{'overheatedgpu'}',
'$data->{'throttled'}',
'$data->{'powertune'}',
'$data->{'timestamp'}',
'$check_in_time'
)
";

    #print "$sql\n";
    my $stmt = $dbh->prepare($sql);
    $stmt->execute or printError($sql,"EXECUTE FAILED: $DBI::errstr");
    #print "\n$stmt->{Statement}\n"; # with a statement handle

    #print "\n$dbh->{Statement}\n"; # with a database handle
    $stmt->finish();
    # disconnect from the MySQL database
    $dbh->disconnect();
}


get_directory_listing();
