// файл будет неким скриптом-посредником, который будет обрабатывать
// те маршруты, которые хранятся в файле "routes.json".

let routes = require('./routes.json');

export default function () {
    let args = Array.prototype.slice.call(arguments);
    let name = args.shift();

    if(routes[name] === undefined){
        console.log('Error 404');
    }

    else {
        return '/' +
            routes[name]
                .split('/')
                .map(function (str) {
                    if(str[0] == '{'){
                        return args.shift();
                    }
                    else {
                        return str;
                    }
                })
                .join('/');
        ;
    }
}