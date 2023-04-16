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
import Header from "@/components/Header";
import Section1 from "@/components/Section1";
import Section2 from "@/components/Section2";
import Section3 from "@/components/Section3";
import Section4 from "@/components/Section4";
import Section5 from "@/components/Section5";
import Section6 from "@/components/Section6";
import Section7 from "@/components/Section7";
import Footer from "@/components/Footer";

interface HomeProps {
  data: PageData; 
}

const Home: NextPage<HomeProps> = ({ data }) => {
  return (
    <div>
      <Head>
        <title>MeuTudo</title>
      </Head>
      <Header />
      <div id="content" className="site-content">
        <div id="primary" className="content-area">
          <main id="main" className="site-main">
            <Section1 text={data.section_1.text_1} />
            <Section2 blocks={data.section_2.blocks} />
            <Section3
              text={data.section_3.text}
              label={data.section_3.label}
              title={data.section_3.title}
            />
            <Section4 blocks={data.section_3.blocks} />
            <Section5
              list={data.section_4.list}
              label={data.section_4.label}
              title={data.section_4.title}
            />
            <Section6
              text={data.section_5.text}
              label={data.section_5.label}
              title={data.section_5.title}
            />
            <Section7
              text1={data.section_6.text}
              text2={data.section_7.text}
            />
            <Footer />
          </main>
        </div>
      </div>
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
