import React, { useState } from "react";
import DonasiButton from "./DonasiButton";

const Navbar = () => {
  const [color, setColor] = useState(false);

  const changeColor = () => {
    if (window.scrollY >= 90) {
      setColor(true);
    } else {
      setColor(false);
    }
  };

  window.addEventListener("scroll", changeColor);

  return (
    <nav className={color ? `fixed fade-in bg-white left-0 w-full px-48 py-8 flex justify-between items-center font-poppins z-20 shadow-md` : `fixed left-0 w-full px-48 py-8 flex justify-between items-center font-poppins z-20`}>
      <div className="font-bold text-[28px]">
        <h1 className={color ? "text-accent" : "text-white"}>
          Peduli<span className="text-secondary">Hub</span>
        </h1>
      </div>
      <div className={color ? "flex text-base font-medium" : "flex text-white font-medium"}>
        <ul className="list-none flex justify-end items-center">
          <li className="mr-10">
            <a href="">Berita</a>
          </li>
          <li className="mr-10">
            <a href="">Galang Dana</a>
          </li>
          <li>
            <DonasiButton
              content={{
                button: "Donasi Sekarang",
              }}
            />
          </li>
        </ul>
      </div>
    </nav>
  );
};

export default Navbar;
