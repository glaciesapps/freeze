Freeze
===========
Extracting IceHrm [](https://icehrm.com) core components into a reusable framework

Documentation [](https://glacies.gitbook.io/freeze/)

Setup Development Environment
-----------------------------

Development environment is packaged as a Vagrant box. I includes php7, nginx, phpunit and other
software required for running icehrm

Preparing development VM with Vagrant
-------------------------------------

- Clone icehrm from https://github.com/gamonoid/icehrm.git or download the source

- Install Vagrant [https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)

- Run vagrant up in icehrm root directory (this will download icehrm vagrant image which is  ~1 GB)

```
~ $ vagrant up
```

- Run vagrant ssh to login to the Virtual machine

```
~ $ vagrant ssh
```

- Add following entries to the end of the host file to map icehrm domains to VagrantBox (on MacOS and Linux this is /etc/hosts | on windows this is Windows\System32\Drivers\etc\hosts)

```
192.168.40.41   app.freeze.test
192.168.40.41   clients.freeze.test
```

- Navigate to [http://clients.freeze.test/dev](http://clients.freeze.test/dev) to load application from VM. (user:admin/pass:admin)

### Notes to Developers

- When ever you have done a change to JavaScript or CSS files in freeze/web rebuild the frontend
```
~ $ cd /vagrant
~ $ gulp
```
