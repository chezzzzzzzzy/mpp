
  // Available variables:
  // - Machine
  // - interpret
  // - assign
  // - send
  // - sendParent
  // - spawn
  // - raise
  // - actions
  // - XState (all XState exports)

  import { Machine, interpret } from 'xstate';

  
  const fetchMachine = Machine({
    id: 'fetch',
    initial: 'idle',
    
    context: {
      retries: 0
    },
    states: {
      
      idle: {
        
        on: {
          FETCH: 'submitted'
        }
        
      },



      submitted: {
        
          
        on: {
          FETCH: 'acknowledged'
        }



      },

      acknowledged: {    
        
          on: {
          FETCH: 'assigned'
        }

       


      },

      assigned: {
        
          on: {
          FETCH: 'installationInProgress'
        }


      },

      installationInProgress: {

          on: {
          FETCH: 'completed'
        }

      },

      completed: {

        on: {
          RESOLVE: 'closed',
          REJECT: 'installationInProgress'
        }

      },

      closed: {

        type: 'final'



      },

      
    }
  });
  