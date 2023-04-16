import React from "react";
import styles from "@/styles/Section5.module.css";

interface Section5Props {
  list: string[];
  label: string;
  title: string;
}

const Section5: React.FC<Section5Props> = ({ list, label, title }) => {
  return (
    <section className={styles.heroApp}>
      <div className={styles.container}>
        <div className={styles.content}>
          <div className={styles.celBg}>
            <img src="/assets/images/section_4_1.webp" alt="section_4_1" />
          </div>
          <div className={styles.ourPlatform}>
            <h3>{label}</h3>
            <p>{title}</p>
          <ul className={styles.appBenefits}>
            {list.map((item, index) => (
              <li key={index}>
                <span>
                  <img src="/assets/images/check.svg" alt="check" />
                </span>
                {item}
              </li>
            ))}
          </ul>
          <div className={styles.download}>
            <div className={styles.google}>
              <a href="#">
                <img src="/assets/images/app_google.webp" alt="app_google" />
              </a>
            </div>
            <div className={styles.appStore}>
              <a href="#">
                <img src="/assets/images/app_apple.webp" alt="app_apple" />
              </a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Section5;
