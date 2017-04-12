module.exports = function generateGitAdd(files) {
    let exec = require('child_process').exec;
    let cmd = 'git add ' + files.join(' ');

    exec(cmd, function (error, stdout) {
        console.info(cmd);
    });
};

