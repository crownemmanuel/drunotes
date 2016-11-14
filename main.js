'use strict';
const electron = require('electron');
const app = electron.app;  // Module to control application life.
const BrowserWindow = electron.BrowserWindow;  // Module to create native browser window.
const Menu = electron.Menu;


// php ruleZ
var path = require("path");
var php = require("gulp-connect-php");
php.server({
    port: 8088,
    hostname: "127.0.0.1",
    base: path.resolve(__dirname) + '/project/drupal',
    keepalive: true,
    open: false,
    // this is now pointing to a possible local installation of php, that is best for portability
    // feel free to change with a system-wide installed php, that is dirty & working, but less portable
    bin: path.resolve(__dirname) + "/php/bin/php",
    root: "/",
    stdio: "inherit"
},function(){
    createWindow ();
});




// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let mainWindow;

// Quit when all windows are closed.
app.on('window-all-closed', function() {
  // On OS X it is common for applications and their menu bar
  // to stay active until the user quits explicitly with Cmd + Q
  if (process.platform != 'darwin') {
    app.quit();
  }
});

function createWindow () {
    // Create the browser window.
    mainWindow = new BrowserWindow({
            width: 900,
            height: 600,
            minWidth: 900,
            minHeight: 600,
            backgroundColor: '#000000',
            icon:path.resolve(__dirname)+'/assets/img/icon.png'
        })

    const me= [
        {
            label: 'Drunotes'
        }
    ];
    const menuTemplate = [
        {
            label: 'Drunotes',
            submenu: [
                {
                    label: 'New Note',
                    click () { mainWindow.loadURL("http://127.0.0.1:8088/node/add/note?destination=drunote_home") }

                },
                {
                    type: 'separator'
                },
                {
                    role: 'undo'
                },
                {
                    role: 'redo'
                },
                {
                    type: 'separator'
                },
                {
                    role: 'cut'
                },
                {
                    role: 'copy'
                },
                {
                    role: 'paste'
                },
                {
                    role: 'selectall'
                },
                {
                    type: 'separator'
                },
                {
                    label: 'Login',
                        click () { mainWindow.loadURL("http://127.0.0.1:8088/user") }

                },
                {
                    label: 'Logout',
                        click () { mainWindow.loadURL("http://127.0.0.1:8088/user/logout") }

                },
                {
                    role: 'quit'
                }
            ]
        }
        ];
    const menu = Menu.buildFromTemplate(menuTemplate);
    Menu.setApplicationMenu(menu);

    // and load the index.html of the app.
    mainWindow.loadURL("http://127.0.0.1:8088/")



        // Open the DevTools.
      //  mainWindow.webContents.openDevTools()

    // Emitted when the window is closed.
    mainWindow.on('closed', function () {
        // Dereference the window object, usually you would store windows
        // in an array if your app supports multi windows, this is the time
        // when you should delete the corresponding element.
        mainWindow = null
    })
}


//app.on('ready', createWindow);
