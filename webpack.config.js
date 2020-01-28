const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const ManifestPlugin = require("webpack-manifest-plugin");

module.exports = {
  entry: "./js/app.js",
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "bundle.[hash].js"
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].[hash].css"
    }),
    new CleanWebpackPlugin(),
    new ManifestPlugin()
  ],
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          // Translates CSS into CommonJS
          "css-loader",
          // Compiles Sass to CSS
          "sass-loader"
        ]
      }
    ]
  }
};
