const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );
const MiniCSSExtractPlugin = require( 'mini-css-extract-plugin' );
const FixStyleOnlyEntriesPlugin = require( 'webpack-fix-style-only-entries' );
const postcssPresetEnv = require( 'postcss-preset-env' );

module.exports = [
    {
        entry: {
            theme: path.resolve( process.cwd(), 'src/scss', 'theme.scss' ),
            editor: path.resolve( process.cwd(), 'src/scss', 'editor.scss' ),
        },
        output: {
            filename: '[name].js',
            path: path.resolve( process.cwd(), 'assets', 'css' ),
        },
        module: {
            rules: [
                {
                    test: /\.(sc|sa|c)ss$/,
                    exclude: /node_modules/,
                    use: [
                        MiniCSSExtractPlugin.loader,
                        {
                            loader: 'css-loader',
                            options: {
                                url: false,
                                sourceMap: true,
                                importLoaders: 2,
                            },
                        },
                        {
                            loader: 'postcss-loader',
                            options: {
                                sourceMap: true,
                                postcssOptions: {
                                    plugins: () => [
                                        postcssPresetEnv({
                                            browsers: 'last 2 versions',
                                        }),
                                    ],
                                },
                            },
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true,
                                sassOptions: {
                                    outputStyle: 'expanded',
                                },
                            },
                        },
                    ],
                },
            ],
        },
        plugins: [
            new MiniCSSExtractPlugin(),
            new FixStyleOnlyEntriesPlugin(),
        ],
    },
];
