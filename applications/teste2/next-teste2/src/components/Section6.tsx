import React from "react";
import styles from "../styles/Section6.module.css";
import Link from "next/link";

interface Section6Props {
  text: string;
  label: string;
  title: string;
}

const Section6: React.FC<Section6Props> = ({ text, label, title }) => {
  return (
    <section className={`${styles.heroPurpose} section`}>
      <div className={`${styles.heroPurposeContainer} container`}>
        <div className={`${styles.heroPurposeContent} content`}>
          <h3 className={styles.heroPurposeContentH3}>{label}</h3>
          <p className={styles.heroPurposeContentP}>{title}</p>
          <span className={styles.heroPurposeContentSpan}>{text}</span>
          <Link href="#" className={styles.heroPurposeContentBtn}>
            <strong>Simule agora</strong>
          </Link>
        </div>
        <div className={`content ${styles.heroPurposeContent}`}>
          <div className={styles.graph}>
            <img
              src="/assets/images/section_5_1.webp"
              alt=""
              className={styles.graphImg}
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default Section6;
