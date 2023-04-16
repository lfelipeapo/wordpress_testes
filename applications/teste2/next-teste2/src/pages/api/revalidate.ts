import { NextApiRequest, NextApiResponse } from "next";

import { fetchData } from "@/utils/fetchData";

const revalidate = async (req: NextApiRequest, res: NextApiResponse) => {
  try {
    const data = await fetchData();

    res
      .status(200)
      .json({ success: true, message: "Página revalidada com sucesso." });
  } catch (error) {
    console.error("Erro ao forçar a revalidação:", error);
    res
      .status(500)
      .json({ success: false, message: "Erro ao forçar a revalidação." });
  }
};

export default revalidate;
