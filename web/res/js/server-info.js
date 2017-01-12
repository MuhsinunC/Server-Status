(function () {
    'use strict';

    var SyfaroAPI, MinecraftAPI, baseURL;

    baseURL = 'https://mcapi.us';

    SyfaroAPI = (function () {
        /**
         * @constructor
         */
        function SyfaroAPI() {}

        /**
         * Generates a query string from an object
         * @param  {Object} params params
         * @return {String}        querystring
         */
        SyfaroAPI.prototype.queryString = function (params) {
            var str, p;

            str = [];

            for (p in params) {
                if (params[p] === undefined) {
                    continue;
                }

                if (params.hasOwnProperty(p)) {
                    str.push(encodeURIComponent(p) + '=' + encodeURIComponent(params[p]));
                }
            }

            return '?' + str.join('&');
        };

        /**
         * Runs an XHR request for JSON
         * @param  {String}   endpoint API endpoint
         * @param  {Object}   params   GET params
         * @param  {Function} callback function to call when done
         * @return {undefined}            does not return
         */
        SyfaroAPI.prototype.loadJSON = function (endpoint, params, callback) {
            var xhr, url;

            if (typeof (params) === 'function') {
                callback = params;
                params = {};
            }

            params = this.queryString(params);

            url = baseURL + endpoint + params;

            xhr = new XMLHttpRequest();

            xhr.onerror = function () {
                callback(true);
            };

            xhr.onload = function () {
                var data;

                try {
                    data = JSON.parse(xhr.responseText);
                } catch (e) {
                    return callback(e);
                }

                if (data.status === 'error') {
                    return callback(data.error);
                }

                callback(undefined, data);
            };

            xhr.open('GET', url, true);

            xhr.send();
        };

        return SyfaroAPI;
    }());

    MinecraftAPI = (function () {
        var api;

        /**
         * @constructor
         */
        function MinecraftAPI() {}

        api = new SyfaroAPI();

        /**
         * Gets the status of a Minecraft server
         * @param  {String}   ip       ip or domain of server
         * @param  {Object}   options  extra options, such as port
         * @param  {Function} callback callback function
         * @return {undefined}            does not return
         */
        MinecraftAPI.prototype.getServerStatus = function (ip, options, callback) {
            if (typeof (options) === 'function') {
                callback = options;
                options = {};
            }

            options['ip'] = ip;

            api.loadJSON('/server/status', options, callback);
        };
        MinecraftAPI.prototype['getServerStatus'] = MinecraftAPI.prototype.getServerStatus;

        /**
         * Gets all available query information of a Minecraft server
         * @param  {String}   ip       ip or domain of server
         * @param  {Object}   options  extra options, such as port
         * @param  {Function} callback callback function
         * @return {undefined}            does not return
         */
        MinecraftAPI.prototype.getServerQuery = function (ip, options, callback) {
            if (typeof (options) === 'function') {
                callback = options;
                options = {};
            }

            options['ip'] = ip;

            api.loadJSON('/server/query', options, callback);
        };
        MinecraftAPI.prototype['getServerQuery'] = MinecraftAPI.prototype.getServerQuery;

        return MinecraftAPI;
    }());

    window['MinecraftAPI'] = new MinecraftAPI();
}());
