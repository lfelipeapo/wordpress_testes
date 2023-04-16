import React from "react";
import parse from "react-html-parser";
import styles from "../styles/Section7.module.css";
import Link from "next/link";

interface Section7Props {
  text1: string;
  text2: string;
}

const Section7: React.FC<Section7Props> = ({ text1, text2 }) => {
  return (
    <section className={styles.heroFinal}>
      <div className={styles.heroFinalContainer}>
        <div className={`${styles.content} ${styles.one}`}>
          <span>
            <img src="/assets/images/section_6_1.webp" alt="" />
          </span>
          <p className={styles.msg}>
            {parse(text1)}
          </p>
        </div>
        <div className={`${styles.content} ${styles.two}`}>
          <div className={styles.shape}>
            <img
              className={styles.img}
              src="/assets/images/shape_3.png"
              alt=""
            />
            <img
              className={styles.img2}
              src="/assets/images/section_7_1.webp"
              alt=""
            />
          </div>
          <div className={styles.app}>
            <p
              className={styles.msg2}
            >
                { parse(text2) }
            </p>
            <div className={styles.download2}>
              <div className={styles.google}>
                <Link legacyBehavior href="#">
                  <a>
                    <img src="/assets/images/app_google.webp" alt="" />
                  </a>
                </Link>
              </div>
              <div className={styles.appStore}>
                <Link legacyBehavior href="#">
                  <a>
                    <img src="/assets/images/app_apple.webp" alt="" />
                  </a>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Section7;
