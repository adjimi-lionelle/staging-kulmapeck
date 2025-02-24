const Encore = require('@symfony/webpack-encore');
const path = require('path');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const CompressionPlugin = require('compression-webpack-plugin');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('chat', './assets/react/chat/index.tsx')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableTypeScriptLoader()
    .enableReactPreset()
    .enableSassLoader()
    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-transform-runtime');
    })
    .configureDevServerOptions((options) => {
        options.allowedHosts = 'all';
        options.https = false;
    });

if (Encore.isProduction()) {
    Encore.addPlugin(new CompressionPlugin());
    
    if (process.env.ANALYZE) {
        Encore.addPlugin(new BundleAnalyzerPlugin({
            analyzerMode: 'static',
            reportFilename: 'stats.html'
        }));
    }
}

module.exports = Encore.getWebpackConfig();
