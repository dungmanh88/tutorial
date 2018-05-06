# Tree folder
You should have a look at these files and folder in vagrant.laravel.example
```
Vagrantfile
provisioning/
install_ansible_macosx.sh
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
http://docs.ansible.com/ansible/latest/installation_guide/intro_installation.html
or if you are using MacOSX, you can use my script:
```
chmod u+x install_ansible_macosx.sh
./install_ansible_macosx.sh
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

# Access webapp
```
Get ip of webapp from private_network in Vagrantfile
You can access webapp via:
http://<private_network>
```
