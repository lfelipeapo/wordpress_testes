import React from "react";
import styles from "../styles/Footer.module.css";

const Footer: React.FC = () => {
  return (
    <footer className={styles.footer}>
      <div className={styles.footerContainer}>
        <div className={styles.container}>
          <div className={styles.footerColumn}>
            <img
              src="/assets/images/logo2.webp"
              alt="Logo"
              className={styles.footerLogo}
            />
            <div className={styles.socialIcons}>
              <a href="#">
                <img
                  src="/assets/images/facebook.png"
                  alt="facebook"
                  className={styles.faceLogo}
                />
              </a>
              <a href="#">
                <img
                  src="/assets/images/instagram.png"
                  alt="instagram"
                  className={styles.instaLogo}
                />
              </a>
              <a href="#">
                <img
                  src="/assets/images/linkedin.png"
                  alt="linkedin"
                  className={styles.linkedinLogo}
                />
              </a>
              <a href="#">
                <img
                  src="/assets/images/youtube.png"
                  alt="youtube"
                  className={styles.youtubeLogo}
                />
              </a>
            </div>
          </div>
          <div className={styles.footerColumn}>
            <h4>Institucional</h4>
            <ul>
              <li>
                <a href="#">Simule agora</a>
              </li>
              <li>
                <a href="#">Ajuda</a>
              </li>
              <li>
                <a href="#">Sobre nós</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
              <li>
                <a href="#">Carreiras</a>
              </li>
              <li>
                <a href="#">Mapa do site</a>
              </li>
              <li>
                <a href="#">Demonstrações financeiras</a>
              </li>
            </ul>
          </div>
          <div className={styles.footerColumn}>
            <h4>Contatos</h4>
            <p>Suporte</p>
            <p>suporte@meutudo.app</p>
            <p>Capitais e regiões metropolitanas</p>
            <p>
              <i className="fas fa-phone"></i> 4000 1836
            </p>
            <p>Demais localidades</p>
            <p>0800 700 8836</p>
          </div>
          <div className={styles.footerColumn}>
            <h4>Horário de atendimento</h4>
            <p>Segunda a Sexta: 8:00 - 20:00</p>
            <p>Sábado: 08:00 - 16:00</p>
          </div>
          <div className={styles.footerColumn}>
            <div className={styles.footerLinks}>
              <a href="#">Política de privacidade</a>
              <span></span>
              <a href="#">Termos de uso</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
