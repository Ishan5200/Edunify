
import { query } from '../lib/db';

const ShowSchools = ({ schools }) => {
  return (
    <div>
      {schools.map((school) => (
        <div key={school.id}>
          <h2>{school.name}</h2>
          <p>Address: {school.address}</p>
          <p>City: {school.city}</p>
          <img src={`/schoolImages/${school.image}`} alt={school.name} />
        </div>
      ))}
    </div>
  );
};

export async function getStaticProps() {
  try {
    const schools = await query('SELECT name, address, city, image FROM schools');

    return {
      props: {
        schools,
      },
      revalidate: 60, // In seconds. Adjust as needed.
    };
  } catch (error) {
    console.error('Error fetching schools:', error);
    return {
      props: {
        schools: [],
      },
    };
  }
}

export default ShowSchools;