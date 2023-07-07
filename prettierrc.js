import wordpressPrettierConfig from "@wordpress/prettier-config";

export default {
    "extends": [
        "stylelint-config-prettier"
    ],
    ...wordpressPrettierConfig,
};
