ENV['VAGRANT_SERVER_URL'] = 'https://vagrant.elab.pro'

Vagrant.configure("2") do |config|
  config.vm.synced_folder ".", "/vagrant", disabled: true
  config.vm.define "web" do |web|
    web.vm.hostname = "web"
    web.vm.box = "ubuntu/focal64"
    web.vm.network "forwarded_port", guest: 80, host: 8080
    web.vm.provision "ansible" do |ansible|
      ansible.playbook = "ansible/web.yml"
    end
  end
end