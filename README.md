## RSSMonster

Copyright (c) 2018 Piethein Strengholt, piethein@strengholt-online.nl

RSSMonster is an easy to use web-based RSS aggregator, created as an alternative for Google Reader.
RSSMonster features a lightweight fluid responsive design. The font-end has been written in JavaScript (VueJS) and the back-end in Express (NodeJS). It also uses the Twitter Boostrap framework. Several features are implemented such as marking as read when scrolling, drag and drop style manage feeds, json events, etc. Feel free to add any contributions or new features.

![Screenshot](client/src/assets/screenshots/screenshot01.png)

### Prerequisites
* NodeJS 10.x
* Git
* A Mysql installation (other databases will also work with a bit of configuration)

### How to get everything installed
* Clone this repository `git clone https://github.com/pietheinstrengholt/rssmonster.git .`
* Run `npm install` in both the `client` and `server` folder
* Find the `.env.example` file in the root of the `server` folder, copy and rename to `.env`
* Edit `.env` and enter your Mysql or Database server login data (at least fill DB_DATABASE, DB_USERNAME and DB_PASSWORD)
* Run `node_modules/.bin/sequelize init` this will add all needed database tables to your mysql database. Alternatively you can also uncomment the `//force:` true in the app.js inside the server folder.
* Run `node_modules/.bin/sequelize db:seed:all` to seed the database.
* Run `chmod -R 777 storage/`

### Development
If you would like to run RSSMonster in development mode I recommend to run:
- Inside the client folder: `npm run serve`.
- Inside the server folder: `npm run start`.

### Production
If you would like to run RSSMonster in development mode I recommend to run:
- Inside the client folder: `npm run build`.
- Move the `dist` folder created inside the `client` folder to the `server` folder. The NodeJS server is also capable of serving out static content.
- Inside the server folder: `npm run start`.

#### Credits
The following scripts and plug-ins are used within RSSMonster

* NodeJS https://nodejs.org/en/
* Twitter bootstrap: https://twitter.github.io/bootstrap/
* Feedparser: https://github.com/danmactough/node-feedparser/
* VueJS: https://vuejs.org/
* Vue infinite scrolling: https://github.com/PeachScript/vue-infinite-loading
* Waypoints: https://github.com/imakewebthings/waypoints

#### TODO
- Remove dupplicate code from Sidebar
- Rename feed_name, feed_desc, etc.
- Change dist location when building VueJS to ../../server
- Restore Fever API
- Add Docker support