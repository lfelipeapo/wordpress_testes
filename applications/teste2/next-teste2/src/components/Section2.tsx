import React from "react";
import Link from "next/link";
import styles from "@/styles/Section2.module.css";

interface Block {
  text: string;
  title: string;
}

interface Section2Props {
  blocks: Block[];
}

const Section2: React.FC<Section2Props> = ({ blocks }) => {
  return (
    <section className={styles.heroCards}>
      <div className={styles.container}>
        {blocks.map((block, index) => (
          <div key={index} className={styles.card}>
            <span className={styles.cardIcon}>
              <img
                src={"/assets/images/section_2_" + (index + 1) + ".webp"}
                alt=""
              />
            </span>
            <h2>{block.title}</h2>
            <p>{block.text}</p>
            <Link className={styles.btn} href="#">
              <strong>Simule agora</strong>
            </Link>
          </div>
        ))}
      </div>
    </section>
  );
};

export default Section2;
