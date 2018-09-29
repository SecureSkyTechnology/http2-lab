#!/bin/sh
# install docker and docker-compose
apt-get update -o Acquire::ForceIPv4=true
apt-get remove docker docker-engine docker.io
apt-get install -y -o Acquire::ForceIPv4=true apt-transport-https ca-certificates curl software-properties-common \
                g++ make binutils autoconf automake autotools-dev libtool pkg-config \
                zlib1g-dev libcunit1-dev libssl-dev libxml2-dev libev-dev libevent-dev libjansson-dev \
                libc-ares-dev libjemalloc-dev cython python3-dev python-setuptools

curl -4 -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
apt-key fingerprint 0EBFCD88
add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"

apt-get update -o Acquire::ForceIPv4=true
apt-get install -y -o Acquire::ForceIPv4=true docker-ce

curl -L https://github.com/docker/compose/releases/download/1.22.0/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose

# install nghttp2
git clone https://github.com/nghttp2/nghttp2.git
cd nghttp2
git submodule update --init
autoreconf -i
automake
autoconf
./configure
make 
make install

# install h2i
# apt-get install -y golang-1.10
# ln -s /usr/lib/go-1.10/bin/* /usr/bin/
# go get github.com/bradfitz/http2/h2i
# ln -s $(go env GOPATH)/bin/h2i /usr/bin/h2i

# Upgrade to latest curl
# apt remove curl
# wget https://curl.haxx.se/download/curl-7.61.1.tar.bz2
# tar -xvjf curl-7.61.1.tar.bz2
# cd curl-7.61.1/
# ./configure --with-nghttp2=/usr/local --with-ssl
# make
# make install


echo "127.0.0.1 http2-lab" | sudo tee -a /etc/hosts