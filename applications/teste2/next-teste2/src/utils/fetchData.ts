import axios from "axios";

export async function fetchData() {
  const apiUrl = "https://api.npoint.io/c0aa695f90022f632041";

  try {
    const response = await axios.get(apiUrl);
    return response.data;
  } catch (error) {
    console.error("Erro ao buscar os dados:", error);
    return {};
  }
}
