#!/bin/bash
#Official Script of PhCyber Dev Team
#Script Mengubah Banner Pesan Otomatis

clear
read -d "?" -p "Fill in the Server Message in the Below(\"?\" If it's finished):
" line
cat > /etc/issue.net <<-END
$line
END
/etc/init.d/dropbear restart
service ssh restart