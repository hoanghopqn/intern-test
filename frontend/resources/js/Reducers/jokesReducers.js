const initState = {
    listJokes: [],
    link: "jokes",
    id: 1
};

const truyenReducers = (state = initState, action) => {
    switch (action.type) {
        case "GET_JOKES":
            return {
                ...state,
                listJokes: action.payload,
            };
        case "GET_JOKES_ID":
            return {
                ...state,
                id: action.payload,
            };

        default:
            return state;
    }
};

export default truyenReducers;