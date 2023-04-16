import React from "react";
import styles from "../styles/Section1.module.css";

interface Section1Props {
  text: string;
}

const Section1: React.FC<Section1Props> = ({ text }) => {
  return (
    <section className={styles.hero}>
      <div className={styles.overlay}>
        <div className="container">
          <div className={styles.title}>
            <h1 dangerouslySetInnerHTML={{ __html: text }} />
          </div>
        </div>
      </div>
    </section>
  );
};

export default Section1;