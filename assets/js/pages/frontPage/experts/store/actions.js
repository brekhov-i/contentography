import axios from "../../../../modules/api/axios.js";

export const getAllExperts = async ({ commit }) => {
  await axios
    .get("/getExperts")
    .then((response) => {
      commit("setExperts", response.data);
    })
    .catch((e) => {
      console.log(e);
    });
};
