This is the codebase behind the website for the [Renewable Energy Enterprises Foundation](http://alleviatepovertynow.org/) (REEF).

# How To Run The Website

After cloning this repository, run these commands in a terminal:

    cd ~/public_html
    php -S localhost:8000

Then point your browser to [localhost:8000](http://localhost:8000).

# Deploying To Staging
Once you've pushed your changes to this repository, you should deploy your changes to the staging environment with the following command:

    ssh reef@198.211.126.48 "cd /home/reef/reef-web && git pull"

You should then see your changes at [198.211.126.48](http://198.211.126.48).

# Database Credentials

The username and password should be set as environment variables on the server.

    export DATABASE_USERNAME=...
    export DATABASE_PASSWORD=...
