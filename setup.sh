sudo ansible all -m user -a "name=ansible state=present password='{{ 'cisco' | password_hash('sha256') }}'" -u root
sudo ansible all -m authorized_key -a "user=ansible state=present key='{{lookup('file','/home/ansible/.ssh/id_rsa.pub')}}' path='/home/ansible/.ssh/authorized_keys'" -u root
sudo ansible all -m lineinfile -a "path=/etc/sudoers state=present line='ansible ALL=(ALL) NOPASSWD:ALL' backup=yes validate='/usr/sbin/visudo -cf %s'" -u root
