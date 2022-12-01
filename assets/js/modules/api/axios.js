import axios from "axios";
const baseURL =
  process.env.NODE_ENV === "development"
    ? "https://contentographynew/wp-json/wp/v2"
    : "https://contentography.com/wp-json/wp/v2";

export default axios.create({
  baseURL,
});
