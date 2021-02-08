--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/tantaaa.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/tantaaa.com-bytes_log
documentroot: /home2/delhitantaa/public_html
group: delhitantaa
hascgi: 0
homedir: /home2/delhitantaa
ip: 51.210.156.16
owner: intelige
phpopenbasedirprotect: 1
phpversion: ea-php56
port: 80
scriptalias: 
  - 
    path: /home2/delhitantaa/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@tantaaa.com
serveralias: mail.tantaaa.com www.tantaaa.com
servername: tantaaa.com
usecanonicalname: 'Off'
user: delhitantaa
