# repository info
set :branch, "development"

# This may be the same as your `Web` server
role :app, "pro-motionads.ca"

# directories
set :deploy_to, "/home/pmads/subdomains/dev"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[public template com_contracts mod_slideshow]
