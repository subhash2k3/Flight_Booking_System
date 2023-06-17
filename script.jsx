import React, { useState } from 'react';
import LoadingAnimation from './LoadingAnimation';

const App = () => {
  const [loading, setLoading] = useState(false);

  return (
    <div>
      {loading ? (
        <LoadingAnimation />
      ) : (
        <div>
          This is the main content of the app.
        </div>
      )}
    </div>
  );
};

export default App;
