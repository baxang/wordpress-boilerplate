set :application, "set your application name here"
set :repository,  "set your repository location here"

set :scm, :git
set :git_shallow_clone, 1
set :git_enable_submodules, 0

role :web, "your web-server here"                          # Your HTTP server, Apache/etc
role :app, "your app-server here"                          # This may be the same as your `Web` server
role :db,  "your primary db-server here", :primary => true # This is where Rails migrations will run
role :db,  "your slave db-server here"

set :user,         "foo"
set :deploy_to,    "set your application path here"
set :use_sudo,     false
set :deploy_via,   :remote_cache
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules"]

after "deploy:setup" do
  run "#{try_sudo} mkdir -m 757 -p #{shared_path}/uploads"
end

after "deploy:symlink" do
  run "ln -nfs #{shared_path}/uploads #{release_path}/public/wp-content/uploads"
  run "chmod -R g-w #{release_path}"
end
