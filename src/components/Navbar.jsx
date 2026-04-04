import { useEffect } from 'react'

export default function Navbar({ activeSection }) {
  const handleScroll = (sectionId) => {
    window.location.hash = sectionId
  }

  const links = [
    { id: 'home', label: 'Home' },
    { id: 'about', label: 'About' },
    { id: 'products', label: 'Products' },
    { id: 'contact', label: 'Contact' }
  ]

  return (
    <nav className="navbar">
      <div className="logo">
        <img src="/logo.png" alt="Ghazi Arms Logo" />
      </div>
      <ul>
        {links.map(link => (
          <li key={link.id}>
            <a
              href={`#${link.id}`}
              className={activeSection === link.id ? 'active' : ''}
              onClick={() => handleScroll(link.id)}
            >
              {link.label}
            </a>
          </li>
        ))}
      </ul>
    </nav>
  )
}
