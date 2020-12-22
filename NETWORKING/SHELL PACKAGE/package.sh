#!/bin/bash
#AUTHOR : MCHEVRO
#GITHUB : https://github.com/mchevro
echo "====================================";
echo "===SEKOLAH HACKER BY TOMCAT SQUAD===";
echo "====================================";
echo "[1] Install FTP                     ";
echo "[2] Install SSH                     ";
echo "[3] Install SAMBA                   ";
echo "[4] Install MYSQL                   ";
echo "[5] Keluar Program                  ";
while :
do 
read -p "Pilih Nomor : " pilihan;
echo "";
if [ $pilihan ]:
then
case $pilihan in
1)  sudo apt update && apt upgrade -y
    sudo apt install proftpd -y
    sudo echo "
Include /etc/proftpd/modules.conf

UseIPv6				off
# If set on you can experience a longer connection delay in many cases.
IdentLookups			off

ServerName			"TomcatSquad"

ServerType				standalone
DeferWelcome			off

MultilineRFC2228		on
DefaultServer			on
ShowSymlinks			on

TimeoutNoTransfer		600
TimeoutStalled			600
TimeoutIdle			1200

DisplayLogin                    welcome.msg
DisplayChdir               	.message true
ListOptions                	"-l"

DenyFilter			\*.*/

# Port 21 is the standard FTP port.
Port				21

<IfModule mod_dynmasq.c>
# DynMasqRefresh 28800
</IfModule>

MaxInstances			30

# Set the user and group that the server normally runs at.
User				proftpd
Group				nogroup

# Umask 022 is a good standard umask to prevent new files and dirs
# (second parm) from being group and world writable.
Umask				022  022
# Normally, we want files to be overwriteable.
AllowOverwrite			on

TransferLog /var/log/proftpd/xferlog
SystemLog   /var/log/proftpd/proftpd.log

<IfModule mod_quotatab.c>
QuotaEngine off
</IfModule>

<IfModule mod_ratio.c>
Ratios off
</IfModule>

<IfModule mod_delay.c>
DelayEngine on
</IfModule>

<IfModule mod_ctrls.c>
ControlsEngine        off
ControlsMaxClients    2
ControlsLog           /var/log/proftpd/controls.log
ControlsInterval      5
ControlsSocket        /var/run/proftpd/proftpd.sock
</IfModule>

<IfModule mod_ctrls_admin.c>
AdminControlsEngine off
</IfModule>

Include /etc/proftpd/conf.d/
<Anonymous /home/alice/>
User alice
</Anonymous>

" > /etc/proftpd/proftpd.conf
    sudo useradd -m alice
    systemctl restart proftpd
    clear
    echo "======INSTALASI SELESAI======";
    HOST=$(hostname -I);
    echo "Buka Browser : ftp://$HOST";
    echo "";
    ;;

5)  exit
    ;;

esac
break
fi
continue
done