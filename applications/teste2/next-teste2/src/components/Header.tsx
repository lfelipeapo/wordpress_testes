import React from "react";
import Link from "next/link";
import styles from "@/styles/Header.module.css";

interface HeaderProps {}

const Header: React.FC<HeaderProps> = () => {
  return (
    <header>
      <section className="top-bar">
        <div className="container">
          <nav className={styles.mainMenu}>
            <div className={styles.menuItems}>
              <Link legacyBehavior href="/">
                <a>
                  <div className={styles.logoImage}>
                    <img src="/assets/images/logo.webp" alt="Logo" />
                  </div>
                </a>
              </Link>
              <div className="menu">
                <ul>
                  <li className="page_item page-item-18">
                    <a href="http://localhost:8081/" aria-current="page">
                      Home
                    </a>
                  </li>
                  <li className="page_item page-item-2">
                    <a href="http://localhost:8081/pagina-exemplo/">
                      Página de exemplo
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </section>
    </header>
  );
};

export default Header;