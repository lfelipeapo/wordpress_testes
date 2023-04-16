import Head from "next/head";
import styles from "@/styles/Home.module.css";
import { fetchData } from '@/utils/fetchData';
import { PageData } from "../utils/types";
// import HeroSection from "../components/HeroSection";
// import CardsSection from "../components/CardsSection";
// import VantagesSection from "../components/VantagesSection";
// import BenefitsSection from "../components/BenefitsSection";
// import AppSection from "../components/AppSection";
// import PurposeSection from "../components/PurposeSection";
// import FinalSection from "../components/FinalSection";
import { GetStaticProps, NextPage } from "next";

interface HomeProps {
  data: PageData; 
}

const Home: NextPage<HomeProps> = ({ data }) => {
  return (
    <div>
      <Head>
        <title>MeuTudo</title>
      </Head>
      {/* <HeroSection data={data} />
      <CardsSection data={data} />
      <VantagesSection data={data} />
      <BenefitsSection data={data} />
      <AppSection data={data} />
      <PurposeSection data={data} />
      <FinalSection data={data} /> */}
    </div>
  );
};

export default Home;

export const getStaticProps: GetStaticProps = async () => {
  const data = await fetchData();

  return {
    props: { data },
    revalidate: 3600,
  };
};
