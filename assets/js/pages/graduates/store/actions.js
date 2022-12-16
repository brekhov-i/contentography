import axios from "../../../modules/api/axios.js";

export const getUsers = async ({ commit }) => {
  await axios
    .get("/vipuskniky")
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
      axios.get("/cities"),
      axios.get("/countries"),
      axios.get("/experience"),
      axios.get("/courses"),
    ]);

    commit("setTags", {
      cities: response[0].data,
      countries: response[1].data,
      experience: response[2].data,
      courses: response[3].data,
    });
  } catch (e) {
    console.log(e);
  }
};