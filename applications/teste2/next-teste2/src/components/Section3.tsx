// components/Section3.tsx

import React from "react";
import styles from "../styles/Section3.module.css";


interface Section3Props {
  text: string;
  label: string;
  title: string;
}

const Section3: React.FC<Section3Props> = ({ text, label, title }) => {
  return (
    <section className={styles.heroVantages}>
      <div className={styles.container}>
        <h3>{label}</h3>
        <p>{title}</p>
        <span>{text}</span>
      </div>  
    </section>
  );
};

export default Section3;
