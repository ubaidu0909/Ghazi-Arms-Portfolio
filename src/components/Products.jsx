export default function Products({ onImageClick }) {
  const weapons = [
    { file: 'benelli.jpg', name: 'Benelli Shotgun Set' },
    { file: 'bexar-arms-unsplash.jpg', name: 'Rifle' },
    { file: 'bexar1-arms-unsplash.jpg', name: 'AR Platform Rifle' },
    { file: 'bexar unsplash.jpg', name: 'Rifle Setup' },
    { file: 'david.jpg', name: 'Scoped Rifle' },
    { file: 'dusty.jpg', name: 'Hunting Rifle' },
    { file: 'jay.jpg', name: '9mm Handgun' },
    { file: 'jay-rembert.jpg', name: 'Pistol with Magazine' },
    { file: 'jay-rembert-x.jpg', name: 'Gold Tactical Pistol' },
    { file: 'martin.jpg', name: 'Assault Rifle' },
    { file: 'scott.jpg', name: 'Shotgun A' },
    { file: 'scott-s.jpg', name: 'Shotgun B' },
    { file: 'scott-sz.jpg', name: 'Shotgun C' },
    { file: 'steve.jpg', name: 'Pistol and Holsters' },
    { file: 'stngr.jpg', name: 'AR-15 Tactical' },
    { file: 'stngr-llc.jpg', name: 'Sniper Rifle' },
    { file: 'stngr-llc-q.jpg', name: 'Long Range AR' },
    { file: 'stngr-llc-Y.jpg', name: 'Marksman Rifle' },
    { file: 'tom-def-M.jpg', name: 'Pistol Display' },
    { file: 'thomas-tucker-l.jpg', name: 'Thomas Tucker Rifle' },
    { file: 'thomas-tucker-NFh.jpg', name: 'Thomas Tucker Rifle' },
    { file: 'thomas-tucker-V.jpg', name: 'Shotgun Thomas Tucker' },
    { file: 'austin.jpg', name: 'Tactical Rifle' },
    { file: 'jay-r.jpg', name: 'Modern Pistol' },
    { file: 'bexar2-arms-unsplash.jpg', name: 'Tactical Carbine' },
    { file: 'kemal.jpg', name: 'Operator Rifle' },
    { file: 'thomas.jpg', name: 'Battle Pistol' },
  ]

  return (
    <section id="products" className="products-grid">
      <h2>Our Firearms Collection</h2>
      {weapons.map((weapon, idx) => (
        <div key={idx} className="product-card">
          <img
            src={`/images/${weapon.file}`}
            alt={weapon.name}
            onClick={() => onImageClick(`/images/${weapon.file}`)}
            style={{ cursor: 'pointer' }}
          />
          <h3>{weapon.name}</h3>
          <p>High-quality tactical firearm designed for professional use.</p>
        </div>
      ))}
    </section>
  )
}
