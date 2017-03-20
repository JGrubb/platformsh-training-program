# Platform.sh Training Program

This repo contains the assets and code for the Platform.sh user and developer training course.  The master branch contains only a Vagrantfile for downloading the local development environment, which is based on Debian Jessie.

## Setup steps
- Clone this repository into a local working directory
- Make sure you have [Vagrant](https://www.vagrantup.com/downloads.html) and [Virtualbox](https://www.virtualbox.org/wiki/Downloads) installed.  This course's Vagrant box has been developed against Vagrant 1.9.2 and VBox 5.1.18
- Run `vagrant up` to bring up the VM.  
    - The first time that you run this command it will need to download the base Debian Jessie VM image, this is approximately a 300MB download, so make sure you are on a capable network.
    - Also the first time will run a short provisioning script to install the course's dependencies
        - Git
        - PHP 7.0
        - Redis

## Development

This course will be a hands on training session that will involve buiding a simple example PHP application that provides an API to a Javascript based front end.  Development will take place on different branches of the project, so some familiarity with basic Git usage as well as _very_ basic PHP knowledge is assumed.

Each user will need a Platform.sh account to take full advantage of the hands on nature of this program.