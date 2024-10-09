# Thanks
Many thanks to [BGmot git](https://github.com/BGmot) for his modules

# zabbix-module-custom-menupop
Written according to Zabbix official documentation [Modules](https://www.zabbix.com/documentation/current/en/devel/modules/file_structure)

A module for Zabbix add action **gethostip** for [Custom menupopup](https://github.com/DarkPh0eNixKrg/zabbix-module-custom-menupop)

Module use **hostid** to return Host IP address

Module can work with **Custom menupopup** and without them
```
curl http://zabbix_server/zabbix.php?action=gethostip -H "Content-Type: application/x-www-form-urlencoded" -d "hostid=10084" 

!!!Need auth to Zabbix, not API!!!
```


# How to use
1. Create a folder in your Zabbix server modules folder (by default /usr/share/zabbix/) and copy contents of this repository into that folder.
2. Go to Administration -> General -> Modules click Scan directory and enable the module.
3. Use **curl** or click some menu in Popupmenu Zabbix (Monitoring -> Any sections -> Host)

# Author
Bagaudinov Rustam
[Telegram](https://t.me/DarkPh0eNix)
