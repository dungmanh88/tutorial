https://developer.rackspace.com/blog/a-tutorial-on-application-development-using-vagrant-with-the-pycharm-ide/

Install dependencies
yum -y install gcc gcc-c++ make automake

Install python3
https://janikarhunen.fi/how-to-install-python-3-6-1-on-centos-7.html
yum install https://centos7.iuscommunity.org/ius-release.rpm
yum install python36u python36u-devel

Install pip
https://pip.pypa.io/en/stable/installing/
python3.6 get-pip.py
pip install --upgrade pip

Install mongodb
https://docs.mongodb.com/getting-started/shell/tutorial/install-mongodb-on-red-hat/

Install scrapy
https://doc.scrapy.org/en/latest/intro/install.html

Download pycharm 2017.3.2
https://www.jetbrains.com/pycharm/download/previous.html

Start project scrapy

Config python intepreter to remote path using vagrant:
Remote Python 3.6.4 on Vagrant
/Users/manhdung/tutorial/actor_spider
ssh://vagrant@127.0.0.1:2222 - voi dieu kien Vagrantfile va .vagrant phai nam o thu muc goc cua project
/usr/bin/python3.6 (path on vagrant)
/vagrant/.pycharm_helpers (path on vagrant) (mkdir -p /vagrant/.pycharm_helpers)

Config script path to: /usr/lib/python3.6/site-packages/scrapy/cmdline.py (path on vagrant)
parameter: crawl actor_spider
working directory /vagrant

scrapy runspider actor_spider.py -o actor_spider.json -t json 2> actor_spider.txt
scrapy list
scrapy check
