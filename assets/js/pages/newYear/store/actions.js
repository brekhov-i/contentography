import axios from "../../../modules/api/axios.js";

export const getUsers = async ({ commit }) => {
  await axios
    .get("/coursesNewYear")
    .then((response) => {
      commit("setUsers", response.data);
    })
    .catch((e) => {
      console.log(e);
    });
};

export const getAllTags = async ({ commit }) => {
  try {
    const response = await Promise.all([
      axios.get("/pricesCourse"),
      axios.get("/complexityCourse"),
      axios.get("/thematicsCourse")
    ]);

    commit("setTags", {
      prices: response[0].data,
      complexity: response[1].data,
      thematics: response[2].data
    });
  } catch (e) {
    console.log(e);
  }
};