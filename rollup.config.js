// rollup.config.js
import scss from "rollup-plugin-scss";

export default {
  input: "./js/app.js",
  output: {
    file: "bundle.js",
    format: "iife"
  },
  plugins: [
    scss() // will output compiled styles to bundle.css
  ]
};
