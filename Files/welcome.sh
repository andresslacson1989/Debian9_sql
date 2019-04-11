#!/bin/bash
#Official Script of PhCyber Dev Team

MYIP=$(wget -qO- ipv4.icanhazip.com)

    NORMAL=`echo "\033[m"`
    MENU=`echo "\033[36m"` #Blue
    NUMBER=`echo "\033[33m"` #yellow
    FGRED=`echo "\033[41m"`
    RED_TEXT=`echo "\033[31m"`
	LGREEN=`echo "\033[0m\033[1;32m"`
    ENTER_LINE=`echo "\033[33m"`
	LRED=`echo "\033[0m\033[1;31m"`
	BLUE=`echo "\033[0m\033[1;36m"`

echo -e "Welcome to $MYIP Server
 Official Script of PhCyber Dev Team." | boxes -d ian_jones| lolcat -F 0.2