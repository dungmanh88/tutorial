# Installation Guide
https://github.com/bestmomo/laravel5-3-example

# Tree folder
You should have a look at these files and folder in vagrant.laravel.example
```
Vagrantfile
provisioning/
install_ansible_macosx.sh
install_vagrant_plugin_rsync.sh
```
<project_folder> is a folder contains your webapp code.

# Install virtualbox
```
https://www.virtualbox.org/wiki/Downloads
```

# Install vagrant
```
https://www.vagrantup.com/downloads.html
```

# Install ansible
```
chmod u+x install_ansible_macosx.sh
./install_ansible_macosx.sh
```

# Install vagrant plugin
```
cp install_vagrant_plugin_rsync.sh <project_folder>
cd <project_folder>
chmod u+x install_vagrant_plugin_rsync.sh
./install_vagrant_plugin_rsync.sh
```

# Setup Vagrantfile and provisioning
Copy Vagrantfile và provisioning folder to <project_folder>
```
cp Vagrantfile <project_folder>
cp -r provisioning <project_folder>
```

# Customize Vagrantfile
In general, you don't need to customize anything in Vagrantfile in simple model vagrant box
```
Customize these lines that before them has # CUSTOMIZE HERE
```

# Customize provisioning
In general, you don't need to customize anything in provisioning in simple model vagrant box
```
You can customize these files:
provisioning/roles/mysql/defautls/main.yml
provisioning/roles/nginx/defautls/main.yml
provisioning/roles/php/defautls/main.yml
provisioning/roles/app/defautls/main.yml

Note the lines below # CUSTOMIZE HERE
```

# Apply new changes in vagrant box back to host
```
cd <project_folder>
vagrant rsync-back
```

# Turn on vagrant rsync automatically from host to guest
```
cd <project_folder>
vagrant gatling-rsync-auto
```

# Access webapp
```
Get ip of webapp from private_network in Vagrantfile
You can access webapp via:
http://<private_network>
```
