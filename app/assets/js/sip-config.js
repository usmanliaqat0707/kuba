import '../../../node_modules/jssip/lib-es5/JsSIP.js';

var socket = new WebSocketInterface('wss://web.orbixtartechnologies.com:8089');
var configuration = {
    sockets: [socket],
    uri: 'sip:6002@web.orbixtartechnologies.com',
    password: 'password@123',
    realm: 'sip.orbixtartechnologies.com'
};

var ua = new UA(configuration);

ua.on('connected', function (e) { console.log("User agent connected with the server."); });
ua.on('disconnected', function (e) { console.log("User agent disconnected with the server."); });
ua.on('newRTCSession', function (e) { console.log("User agent started newRTCSession with the server."); });
ua.on('newMessage', function (e) { console.log("User agent received newMessage from the server."); });
ua.on('registered', function (e) { console.log("User agent registered with the server."); });
ua.on('unregistered', function (e) { console.log("User agent unregistered with the server."); });
ua.on('registrationFailed', function (e) { console.log("User agent registrationFailed with the server."); });

ua.start();

