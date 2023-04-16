import React from "react";
import styles from "../styles/Section4.module.css";

interface Block {
  text: string;
  title: string;
}

interface Section4Props {
  blocks: Block[];
}

const Section4: React.FC<Section4Props> = ({ blocks }) => {
  return (
    <section className={styles.benefits}>
      <div className={styles.container}>
          {blocks.map((block, index) => (
            <div key={index} className={styles.benefit}>
              <span className={styles.benefitIcon}>
                <img
                  src={"/assets/images/section_3_" + (index+1) + ".webp"}
                  alt=""
                />
              </span>
              <h2>{block.title}</h2>
              <p>{block.text}</p>
            </div>
          ))}
        </div>
    </section>
  );
};

export default Section4;
