require 'mina/deploy'
require 'mina/git'

set :application_name, 'marcus'
set :domain, 'vm-teal.multimediatechnology.at'
set :deploy_to, '/home/admin/marcuswp'
set :repository, 'git@gitlab.mediacube.at:fhs49058/cms-2023-wp-stieger.git'
set :branch, 'main'
set :user, 'admin'
set :keep_releases, '3'
set :port, '5412'


# shared dirs and files will be symlinked into the app-folder by the 'deploy:link_shared_paths' step.
set :shared_dirs, fetch(:shared_dirs, []).push('public/wp-content/uploads')
set :shared_files, fetch(:shared_files, []).push('wp-config.php', 'public/.htaccess')


# Put any custom commands you need to run at setup
# All paths in `shared_dirs` and `shared_paths` will be created on their own.
task :setup do
  command %[mkdir -p "#{fetch(:deploy_to)}/shared/public/wp-content/uploads"]
end

desc "Deploys the current version to the server."
task :deploy do
  deploy do
    invoke :'git:clone'
    invoke :'deploy:link_shared_paths'
    command %{rm -rf config/}
    command %{rm -rf src/}
    invoke :'deploy:cleanup' # cleaning all releases, keeping x releases

    on :launch do
      in_path(fetch(:current_path)) do
        command %{mkdir -p tmp/}
        command %{touch tmp/restart.txt}
      end
    end
  end
  invoke :'deploy:cleanup' # cleaning all releases, keeping x releases
end
