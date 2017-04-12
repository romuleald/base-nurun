module.exports = {
    properties: {
        module_name: {
            description: 'Module name',
            message: 'Name must be only lowercase letters, or dashes',
            pattern: /^[a-z\-]+$/,
            required: true
        },
        has_unit_test: {
            default: 'true',
            description: 'Has unit test',
            message: 'true or false only',
            required: true,
            type: 'boolean'
        },
        has_css: {
            default: 'true',
            description: 'Has CSS (SCSS)',
            message: 'true or false only',
            required: true,
            type: 'boolean'
        },
        has_twig: {
            default: 'true',
            description: 'has Twig',
            message: 'true or false only',
            required: true,
            type: 'boolean'
        }
    }
};
